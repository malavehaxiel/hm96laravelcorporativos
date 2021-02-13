<?php

namespace App\Exceptions;

use App\Traits\HttpApiResponser;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class Handler extends ExceptionHandler
{
    use HttpApiResponser;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof HttpException)
        {
            $code = $exception->getStatusCode();
            $message = Response::$statusTexts[$code];

            return $this->errorResponse($message, $code);
        }

        if ($exception instanceof ModelNotFoundException)
        {
            $model = strtolower(class_basename($exception->getModel()));
            $message = "Does not exist any instance of {$model} with the given id";
            $code = Response::HTTP_NOT_FOUND;

            return $this->errorResponse($message, $code);
        }

        if ($exception instanceof AuthenticationException)
        {
            $message = $exception->getMessage();
            $code = Response::HTTP_UNAUTHORIZED;

            if ($request->ajax())
                return $this->errorResponse($message, $code);
            else
                return parent::render($request, $exception);
        }

        if ($exception instanceof ValidationException)
        {
            $errors = $exception->validator->errors()->getMessages();
            $code = Response::HTTP_UNPROCESSABLE_ENTITY;

            return $this->errorResponse($errors, $code);
        }

        if (env('APP_DEBUG', false))
        {
            return parent::render($request, $exception);
        }

        return $this->errorResponse('Unexpected error. Try later', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}

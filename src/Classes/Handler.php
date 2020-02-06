<?php

namespace App\Classes;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    private ?Handler $successor = null;

    /**
     * Handler constructor.
     * @param null $successor
     */
    public function __construct(Handler $successor = null)
    {
        $this->successor = $successor;
    }

    final public function handle(RequestInterface $request): ?string
    {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor !== null) {
            //the request has not been processed by this handler =>
            // => see the next
            $processed = $this->successor->handle($request);
        }

        return $processed;
    }

    abstract protected function processing(RequestInterface $request): ?string;
}

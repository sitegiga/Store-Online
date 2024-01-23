<?php

declare(strict_types=1);

namespace Inpsyde\PayoneerSdk\Api\Entities\ListSession;

use Inpsyde\PayoneerSdk\Api\ApiExceptionInterface;

/**
 * Service able to convert array to List instance.
 */
interface ListDeserializerInterface
{
    /**
     * @param array{links: array,
     *              identification: array {
     *                  longId: string,
     *                  shortId: string,
     *                  transactionId: string,
     *                  pspId?: string
     *              },
     *              customer?: array,
     *              payment: array,
     *              status: array {
     *                  code: string,
     *                  reason: string
     *              },
     *              redirect?: array {
     *                  url: string,
     *                  method: string,
     *                  type: string
     *              },
     *              division?: string
     * } $listData
     *
     * @return ListInterface Created instance.
     *
     * @throws ApiExceptionInterface If something went wrong.
     */
    public function deserializeList(array $listData): ListInterface;
}

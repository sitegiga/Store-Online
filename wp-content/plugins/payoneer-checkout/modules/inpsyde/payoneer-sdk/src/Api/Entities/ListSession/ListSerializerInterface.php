<?php

declare(strict_types=1);

namespace Inpsyde\PayoneerSdk\Api\Entities\ListSession;

/**
 * Service able to convert ListInterface to array
 */
interface ListSerializerInterface
{
    /**
     * @param ListInterface $listSession To be serialized.
     *
     * @return array {
     *     links: array{self: string, lang?: string, customer?: string},
     *     identification: array{longId: string, shortId: string, transactionId: string, pspId?: string},
     *     customer?: array{number: string, email?: string, deliveryEmail?: string}
     *     payment: array{reference: string, amount: float, currency: string},
     *     status: array{code: string, reason: string},
     *     style: array{language: string},
     *     redirect?: array{url: string, method: string, type: string},
     * } Serialized LIST session
     */
    public function serializeListSession(ListInterface $listSession): array;
}

<?php

declare(strict_types=1);

namespace Inpsyde\PayoneerSdk\Api\Entities\ListSession;

use Inpsyde\PayoneerSdk\Api\ApiExceptionInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Customer\CustomerInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Identification\IdentificationInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Payment\PaymentInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Redirect\RedirectInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Status\StatusInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Style\StyleInterface;

/**
 * Represents the payment session.
 */
interface ListInterface
{
    /**
     * Return the Links object.
     *
     * @return array{
     *     self: string,
     *     lang?: string,
     *     customer?: string
     * } List of the links related to this session.
     *
     */
    public function getLinks(): array;

    /**
     * Return the identification object.
     *
     * @return IdentificationInterface A session identification object.
     */
    public function getIdentification(): IdentificationInterface;

    /**
     * Return customer information.
     *
     * @return CustomerInterface A customer.
     *
     * @throws ApiExceptionInterface If no customer set.
     */
    public function getCustomer(): CustomerInterface;

    /**
     * Return style.
     *
     * @return StyleInterface A Style related to the LIST session.
     *
     * @throws ApiExceptionInterface If no style set.
     */
    public function getStyle(): StyleInterface;

    /**
     * Return information about payment.
     *
     * @return PaymentInterface Payment data related to this session.
     *
     * @throws ApiExceptionInterface If no payment set.
     *
     */
    public function getPayment(): PaymentInterface;

    /**
     * Return status information.
     *
     * @return StatusInterface Object with this session status data.
     */
    public function getStatus(): StatusInterface;

    /**
     * Return redirect information.
     *
     * @return RedirectInterface Object with this session redirect data.
     *
     * @throws ApiExceptionInterface If no redirect set.
     */
    public function getRedirect(): RedirectInterface;

    /**
     * Return division information
     *
     * @return string
     *
     * @throws ApiExceptionInterface If no division set.
     */
    public function getDivision(): string;
}

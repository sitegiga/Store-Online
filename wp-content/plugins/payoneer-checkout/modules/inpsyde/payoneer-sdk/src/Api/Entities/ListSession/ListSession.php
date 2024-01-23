<?php

declare(strict_types=1);

namespace Inpsyde\PayoneerSdk\Api\Entities\ListSession;

use Inpsyde\PayoneerSdk\Api\ApiException;
use Inpsyde\PayoneerSdk\Api\Entities\Customer\CustomerInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Identification\IdentificationInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Payment\PaymentInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Redirect\RedirectInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Status\StatusInterface;
use Inpsyde\PayoneerSdk\Api\Entities\Style\StyleInterface;

class ListSession implements ListInterface
{
    /**
     * @var CustomerInterface|null An object containing customer data.
     */
    protected $customer;

    /**
     * @var PaymentInterface|null An object containing payment data.
     */
    protected $payment;

    /**
     * @var array{self: string, lang?: string, customer?: string} Links related to payment session.
     */
    protected $links;

    /**
     * @var IdentificationInterface An object containing session identifiers.
     */
    protected $identification;

    /**
     * @var StyleInterface|null
     */
    protected $style;

    /**
     * @var StatusInterface
     */
    protected $status;

    /**
     * @var RedirectInterface|null
     */
    protected $redirect;

    /**
     * @var string|null
     */
    private $division;

    /**
     * @param array{self: string, lang?: string, customer?: string} $links Links related to the session.
     * @param IdentificationInterface $identification Object containing session identifiers.
     * @param CustomerInterface|null $customer Object containing customer data.
     * @param StyleInterface|null $style Object containing style details.
     * @param PaymentInterface|null $payment Object containing payment details.
     * @param RedirectInterface|null $redirect Object containing redirect details.
     * @param string|null $division Division name of this transaction
     */
    public function __construct(
        array $links,
        IdentificationInterface $identification,
        StatusInterface $status,
        PaymentInterface $payment = null,
        CustomerInterface $customer = null,
        StyleInterface $style = null,
        RedirectInterface $redirect = null,
        string $division = null
    ) {

        $this->customer = $customer;
        $this->payment = $payment;
        $this->links = $links;
        $this->identification = $identification;
        $this->style = $style;
        $this->status = $status;
        $this->redirect = $redirect;
        $this->division = $division;
    }

    /**
     * @inheritDoc
     */
    public function getIdentification(): IdentificationInterface
    {
        return $this->identification;
    }

    /**
     * @inheritDoc
     */
    public function getCustomer(): CustomerInterface
    {
        if (! $this->customer) {
            throw new ApiException('No customer found in LIST session.');
        }

        return $this->customer;
    }

    /**
     * @inheritDoc
     */
    public function getStyle(): StyleInterface
    {
        if (! $this->style) {
            throw new ApiException('No style found in the LIST session.');
        }

        return $this->style;
    }

    /**
     * @inheritDoc
     */
    public function getRedirect(): RedirectInterface
    {
        if (! $this->redirect) {
            throw new ApiException('No redirect found in the LIST session');
        }

        return $this->redirect;
    }

    /**
     * @inheritDoc
     */
    public function getPayment(): PaymentInterface
    {
        if (! $this->payment) {
            throw new ApiException('No payment found in the LIST session');
        }

        return $this->payment;
    }

    /**
     * @inheritDoc
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @inheritDoc
     */
    public function getStatus(): StatusInterface
    {
        return $this->status;
    }

    /**
     * @inheritDoc
     */
    public function getDivision(): string
    {
        if (! $this->division) {
            throw new ApiException('No division found in the LIST session');
        }
        return $this->division;
    }
}

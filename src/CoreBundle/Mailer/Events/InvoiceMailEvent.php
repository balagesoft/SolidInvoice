<?php

declare(strict_types=1);

/*
 * This file is part of SolidInvoice project.
 *
 * (c) 2013-2017 Pierre du Plessis <info@customscripts.co.za>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SolidInvoice\CoreBundle\Mailer\Events;

use SolidInvoice\CoreBundle\Mailer\MailerEvents;
use SolidInvoice\InvoiceBundle\Entity\Invoice;

class InvoiceMailEvent extends MessageEvent
{
    /**
     * @var Invoice
     */
    protected $invoice;

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return MailerEvents::MAILER_SEND_INVOICE;
    }

    /**
     * @param Invoice $invoice
     */
    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * @return Invoice
     */
    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }
}

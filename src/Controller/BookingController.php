<?php

namespace App\Controller;

use App\Form\BookingType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;


class BookingController extends AbstractController
{
    /**
     * @Route({
     *     "fr": "/contact-et-reservation",
     *     "en": "/en/contact_and-booking"
     * }, name="booking")
     */
    public function booking(Request $request, MailerInterface $mailer): Response
    {
        $companyEmail = $this->getParameter('app.company_email');
        $form = $this->createForm(BookingType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $booking = $form->getData();
            $email = (new TemplatedEmail())
                ->from(new Address($companyEmail, 'Site web'))
                ->to($companyEmail)
                ->subject('Nouvelle réservation en ligne!')
                ->htmlTemplate('emails/new_booking.html.twig')
                ->context([
                    'booking' => $booking
                ]);

            $mailer->send($email);
            return $this->redirectToRoute('booking');
        }

        return $this->render('pages/booking.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

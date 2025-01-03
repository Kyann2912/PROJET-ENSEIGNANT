<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;  // Importation correcte de la façade Mail

class ContactController extends Controller
{
    /**
     * Gérer l'envoi du message de contact à l'administration
     */
    public function contacter_administration(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'motif' => 'required|string',
        ], [
            'name.required' => 'Veuillez saisir tous les champs',
            'email.required' => 'Veuillez saisir tous les champs',
            'motif.required' => 'Veuillez saisir tous les champs',
        ]);

        // Préparation des données pour l'e-mail
        $data = [
            'name' => $request->input('name'),
            'motif' => $request->input('motif'),
        ];

        // Envoi de l'e-mail à l'utilisateur
        try {
            Mail::send([], [], function ($message) use ($data, $request) {
                // Configuration du destinataire, sujet, et du corps de l'e-mail
                $message->to($request->input('email'))  // L'e-mail de l'utilisateur
                        ->subject('Votre message a bien été reçu')
                        ->setBody('<p>Bonjour <strong>' . $data['name'] . '</strong>,</p>' .
                                  '<p>Nous avons bien reçu votre message :</p>' .
                                  '<blockquote>' . $data['motif'] . '</blockquote>' .
                                  '<p>Merci de nous avoir contactés.</p>', 'text/html');
                // Configuration de l'expéditeur
                $message->from('no-reply@votreapp.com', 'Votre Application');
            });

            // Réponse après l'envoi de l'e-mail
            return response()->json(['message' => 'Votre message a été envoyé à votre adresse e-mail.'], 200);

        } catch (\Exception $e) {
            // Gestion des erreurs d'envoi d'e-mail
            return response()->json(['message' => 'Une erreur est survenue lors de l\'envoi de votre message.'], 500);
        }
    }
}

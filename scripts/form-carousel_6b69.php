<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Neue Nachricht vom Auftrags Service!',
    'email_message' => 'Du hast eine neue Nachricht vom Kontaktformular des Auftrags Service bekommen.',
    'success_redirect' => '',
    'sendIpAddress' => false,
    'email' => array(
    'from' => 'Max@rascherer.de',
    'to' => 'Max@rascherer.de'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'select' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'select',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'text' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Discord Name',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Discord Name\' is required.'
    )
    ),
    'message-1' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Nachricht',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nachricht\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>
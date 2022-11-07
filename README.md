# Drupal_Custom_Module
Custom module to create ContentType, Nodes &amp; a config form programmatically


Create a custom Drupal module:

    The module should be able to provide a new content type named ‘Movies’.

    The Movies content type should have the following fields:

        Movie Title

        Movie Release Date

        Movie Image

        Movie Budget

    When user will enable this module, some dummy nodes of this content type will get created.

    Create a custom admin config form which will have the following fields:

        Movies estimated budget ( Number )

        This form link should be visible under Configuration > Development as Movie Budget Config

        Add the default value in the config form settings and it should be used in the form when module is installed.

    When user visits the movie nodes, he or she should be able to see a message saying the Movie is Over Budget Or Movie is Under Budget.


Installation
============

1) Use [Composer](https://getcomposer.org/) to download the library

.. code-block:: bash

    php composer.phar require zapoyok/pdfjs-bundle

2) Then add the ZapoyokPdfJsBundle to your application kernel:

.. code-block:: php

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Zapoyok\PdfJsBundle\ZapoyokPdfJsBundle(),
            // ...
        );
    }

3) Then add the ZapoyokPdfJsBundle to your assetic configuration:

.. code-block:: yaml

    # Assetic Configuration
    assetic:
        # ...
        bundles:        [ ZapoyokPdfJsBundle ]
        # ...

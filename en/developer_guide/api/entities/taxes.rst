*****
Taxes
*****

URLs
====

*   http://example.com/api/**taxes/**—refer to all tax objects. Only ``GET`` and ``POST`` are supported.
*   http://example.com/api/**taxes/:id**—refer to a particular tax object. ``GET``, ``PUT``, and ``DELETE`` are supported.

Pagination
==========

To get a specific number of taxes or list of taxes from a concrete page in a response, use pagination parameters:

.. list-table::
    :header-rows: 1
    :stub-columns: 1
    :widths: 20 30

    *   -   Pagination param
        -   Description
    *   -   page
        -   Shows taxes on a page with the defined number
    *   -   items_per_page
        -   Shows N taxes, where N - is a number defined in the parameter

**Examples:**

*   *http://example.com/api/taxes?page=5*

Response is an array with 10 taxes from the 5th page (10 is the default value of the ``items_per_page`` parameter).

*   *http://example.com/api/taxes?items_per_page=20*

Response is an array with 20 taxes from the first page.

*   *http://example.com/api/taxes?page=5&items_per_page=20*

Response is an array with 20 taxes from the 5th page.
       
Fields
======

A tax object has a number of properties, represented by fields.

The full list of supported fields is given below (mandatory fields are marked with **\***).

.. note:: Any field not listed in the table below will be ignored if occurs in an API request JSON data.

.. list-table::
    :header-rows: 1
    :stub-columns: 1
    :widths: 5 30 5 10

    *   -   Field name
        -   Description
        -   Default value
        -   Supported values
    *   -   tax*
        -   Tax name
        -   —
        -   string
    *   -   tax_id*
        -   Tax ID
        -   Set automatically
        -   integer
    *   -   regnumber
        -   Registration number
        -   —
        -   integer
    *   -   priority
        -   Tax priority
        -   0
        -   positive integer
    *   -   price_includes_tax
        -   | If ``Y``, the tax will be included in product price,
            | if ``N``, the tax value will be added to product price
        -   ``N``
        -   | ``Y``
            | ``N``
    *   -   display_including_tax
        -   Include the tax in product price
        -   ``N``
        -   | ``Y``
            | ``N``
    *   -   address_type
        -   | If ``S``, the tax rates will depend on shipping address,
            | if ``B``, the tax rates will depend on billing address
        -   ``S``
        -   | ``S``
            | ``B``
    *   -   status
        -   | Tax status:
            | ``A`` for Active,
            | ``D`` for Disabled,
            | ``H`` for Hidden
        -   ``A``
        -   | ``A``
            | ``D``
            | ``H``
    *   -   lang_code
        -   Language code for the tax name
        -   The language code of the default store language
        -   | EN
            | RU
            | etc.

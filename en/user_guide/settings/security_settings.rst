*****************
Security Settings
*****************

Use this section to adjust security settings for accessing the backend.

* **Enable secure connection for the storefront**—if you enable this setting, storefront pages will work through the HTTPS protocol. This requires an SSL certificate to be installed on your server.

* **Enable secure connection in the administration panel**—if you enable this setting, the administration panel will work through the HTTPS protocol. This requires an SSL certificate to be installed on your server.

* **Keep HTTPS connection once a secure page is visited**—if you enable this setting, visitors will continue browsing the store through the HTTPS protocol after they visit a secure page for the first time.

* **Minimum administrator password length**—the minimum number of characters in an administrator password.

* **Administrator password must contain both letters and numbers**—if you enable this setting, the system will require an administrator password to contain both letters and numbers. This improves password strength and provides additional protection against guessing the password and brute-force attacks.

* **Force administrators to change password on the first login**—if you enable this setting, store administrators will have to change their passwords once they log in to the administration panel for the first time.

* **Password validity period in days**—the number of days before an administrator password expires and the user has to change the password. If you don't want passwords to expire, set the value of this field to *0* (zero).

* **Access key to cron script which sends e-mail notifications of password change**—the key to access the cron script that reminds the store administrator to change the password. To activate the script, open the following link in your web browser ``http://www.example.com/admin.php?dispatch=profiles.password_reminder&cron_password=access_key`` replacing ``www.example.com`` with your domain, and replacing the ``access_key`` part with the key you enter in this field.

* **Notify visitors about cookies use**—if you enable this setting, visitors will see the following note when they enter the site:

.. image:: img/cookies_note.png
    :align: center
    :alt: Notification about cookies for the store visitors.

The note will be visible till a visitor clicks **OK**.

# Restricting wp-admin Access

- Limit access by IP in .htaccess:
```
<Files wp-login.php>
    order deny,allow
    Deny from all
    Allow from 192.168.1.100
</Files>
```
- Use plugins to enforce 2FA and CAPTCHA
- Move login page with plugins like WPS Hide Login

# Securing wp-config.php

- Move wp-config.php one directory above the web root if possible
- Set file permissions to 600: `chmod 600 wp-config.php`
- Add the following to .htaccess to deny web access:

```
<files wp-config.php>
  order allow,deny
  deny from all
</files>
```
- Use environment variables for sensitive data (DB password, keys)

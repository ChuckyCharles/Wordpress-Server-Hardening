# Setting up SSL with Let's Encrypt

1. Install Certbot: `sudo apt install certbot python3-certbot-apache`
2. Run Certbot: `sudo certbot --apache`
3. Follow prompts to select your domain and enable HTTPS
4. Test auto-renewal: `sudo certbot renew --dry-run`

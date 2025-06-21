#!/bin/bash
# Initial hardening for Digital Ocean droplet

# Update system
apt update && apt upgrade -y

# Add a new user and disable root SSH
adduser secureadmin
usermod -aG sudo secureadmin
sed -i 's/PermitRootLogin yes/PermitRootLogin no/' /etc/ssh/sshd_config
systemctl restart sshd

# Enable UFW
ufw allow OpenSSH
ufw allow 80/tcp
ufw allow 443/tcp
ufw enable

# Install fail2ban
apt install fail2ban -y
systemctl enable fail2ban

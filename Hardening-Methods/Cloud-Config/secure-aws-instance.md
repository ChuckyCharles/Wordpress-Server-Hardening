# Secure AWS EC2 Instance for WordPress

## Steps:
1. Use the latest Ubuntu LTS AMI.
2. Enable automatic security updates.
3. Use a non-root user for SSH access.
4. Only allow SSH from trusted IPs (set in Security Groups).
5. Attach an IAM role with least privilege.
6. Enable AWS backups (EBS snapshots).
7. Use encrypted EBS volumes.
8. Disable password authentication (use SSH keys only).

## Example Security Group Rules
- Allow: 22/tcp (SSH) from your IP only
- Allow: 80/tcp, 443/tcp (HTTP/HTTPS) from anywhere
- Deny all other inbound traffic

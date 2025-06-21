# Cloud Backup Policy Example

- Daily automated backups of web root and database
- Retain daily backups for 7 days, weekly for 4 weeks, monthly for 6 months
- Store backups in a separate, access-controlled bucket (S3/Spaces)
- Test restore process quarterly
- Encrypt backups at rest and in transit

# Deploy secrets checklist for Olo

Ustaw w GitHub repo `superkolo/65mkb`:
`Settings -> Secrets and variables -> Actions`

Najlepiej dodać je jako **Environment secrets** dla environmentu `production`.

## Wymagane zawsze
- `DEPLOY_PROTOCOL`
  - dozwolone wartości: `sftp` albo `ftps`
- `DEPLOY_HOST`
  - adres serwera, np. `example.com`
- `DEPLOY_USERNAME`
  - użytkownik deployowy
- `DEPLOY_TARGET_DIR`
  - katalog docelowy na serwerze, np. `/public_html/65mkb`

## Dla SFTP
Jedna z dwóch opcji:

### Opcja A — rekomendowana
- `DEPLOY_PRIVATE_KEY`
  - prywatny klucz SSH użytkownika deployowego

### Opcja B
- `DEPLOY_PASSWORD`
  - hasło do konta SFTP

Opcjonalnie:
- `DEPLOY_PORT`
  - domyślnie `22`
- `DEPLOY_HOST_KEY`
  - wpis host key do `known_hosts`
  - rekomendowane dla mocniejszej weryfikacji serwera

## Dla FTPS
- `DEPLOY_PASSWORD`
  - hasło do konta FTPS

Opcjonalnie:
- `DEPLOY_PORT`
  - domyślnie `21`

## Ważne
- workflow odpala się po pushu na `main`
- repo nie przechowuje żadnych haseł
- bez ustawionych sekretów deploy po prostu nie przejdzie
- workflow akceptuje tylko `sftp` albo `ftps`

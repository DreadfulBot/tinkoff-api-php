# Дополнительные инструкции

## Чтобы добавить библиотеку в ваш проект

```bash
composer require vendor/package-name:dev-main --prefer-source
```

## Собрать под другую версию php из исходников

### Install the CLI wrapper if needed

```bash
npm install
# or
npm i -D @openapitools/openapi-generator-cli
```

### Pin the generator to a pre–Nov 2022 release (e.g. 6.2.1)

```bash
npx openapi-generator-cli version-manager set 6.2.1
```

### Generate with correct namespace etc

```bash
make generate
```

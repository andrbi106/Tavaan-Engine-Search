# Tavaan Engine — Search

> **جست‌وجوی Full-Text** — موتور Search در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.search` |
| نام | `Search` |
| عنوان فارسی | جست‌وجوی Full-Text |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Search` |
| نوع | `engine` |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Search\Contracts\IndexInterface`
- `Tavaan\Engine\Search\Contracts\SearchDriverInterface`
- `Tavaan\Engine\Search\Contracts\SearchManagerInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Search\Exceptions\SearchException`

## Facadeها

- `Tavaan\Engine\Search\Facades\Search`

## کلاس‌های اصلی

- `src/Console/SearchReindexCommand.php`
- `src/Drivers/MeilisearchDriver.php`
- `src/Drivers/MySqlDriver.php`
- `src/Drivers/NativeDriver.php`
- `src/Drivers/NativeIndex.php`
- `src/Drivers/PgSqlDriver.php`
- `src/Drivers/SqliteFtsDriver.php`
- `src/Drivers/TypesenseDriver.php`
- `src/Highlighter.php`
- `src/Persian.php`
- `src/SearchManager.php`
- `src/SearchResolver.php`
- `src/SearchResult.php`
- `src/SearchServiceProvider.php`
- `src/Searchable.php`

## Service Providerها

- `Tavaan\Engine\Search\SearchServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

## پیکربندی

- فایل پیکربندی: `config/search.php`
- کلید: `search`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Search.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Search`** (این مخزن) | موتور Search |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.

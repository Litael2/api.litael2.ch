# API - /Geocache

Die API für meinen persönlichen Geocache

## Endpoint
Den Platzhalter `{GC-Code}` mit dem Geocache Code ersetzen.
```bash
POST /geocache/{GC-Code}
```

## Request

### HTTP Method
> GET

### Host
```bash
api.litael2.ch
```

### Headers
- **Accept:** application/json
- **Content-Type:** application/json

### Body
Ersetzen sie den Platzhalter `your_code` durch ihren Code.
```bash
{
    "code": "your_code"
}
```

## Beispiel

Mein Beispiel GC ist `gca7cjg`.
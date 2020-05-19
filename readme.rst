# Example JSON Request

### 1. GET Reqest
```json
[
	{
		"id": "1",
		"nama": "Orang",
		"stb": "13020170001"
	},
	{
		"id": "2",
		"nama": "Orang2",
		"stb": "13020170002"
	},
	{
		"id": "3",
		"nama": "Orang2",
		"stb": "13020170002"
	}
]
```
### 2. POST Request (Success)

```json
{
	"status": true,
	"message": "new mahasiswa has been created"
}
```

### 3. POST Request (Failed)
```json
{
	"status" => false,
	"message" => "failed"
}
```

# Google Custom Search XML Annotations Generator

This app is being created to allow organizations with many (25+) websites to programmatically create an annotations file for Google Custom Search via API. The goal is to have this API running on a central server, then write plugins for your CMS that will communicate with the API to build the annotations file.

## Warning

Do NOT use this application in a production environment as is. Inputs are not sanitized or validated. BAD THINGS CAN HAPPEN.

## Contributing

This project really needs contributors to help with security, new features, and documentation. If you would like to help out, check out the issues (and fix them) or submit a pull request with your awesome, improved code.

## Authentication

This app currently uses basic authorization. Check the database seeds for usernames and passwords.

## Site API Endpoints

### Retrieving a list of sites

__Request__
```
GET domain.com/api/v1/sites
```

__Response__
```
{
    "error": false,
    "sites": [
        {
            "id": "3",
            "user_id": "2",
            "name": "COALS",
            "url": "aglifesciences.tamu.edu/*",
            "comment": "Main COALS site",
            "created_at": "0000-00-00 00:00:00",
            "updated_at": "0000-00-00 00:00:00",
            "searches": [
                {
                    "id": "2",
                    "user_id": "2",
                    "name": "COALS All",
                    "label": "_cse_gjh28cnt",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "site_id": "3",
                        "search_id": "2"
                    }
                }
            ]
        },
        {
            "id": "4",
            "user_id": "2",
            "name": "Ag Economics",
            "url": "ageco.tamu.edu/*",
            "comment": "AECO Department site",
            "created_at": "0000-00-00 00:00:00",
            "updated_at": "0000-00-00 00:00:00",
            "searches": [
                {
                    "id": "2",
                    "user_id": "2",
                    "name": "COALS All",
                    "label": "_cse_gjh28cnt",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "site_id": "4",
                        "search_id": "2"
                    }
                },
                {
                    "id": "3",
                    "user_id": "2",
                    "name": "COALS Departments",
                    "label": "_cse_in382nd9",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "site_id": "4",
                        "search_id": "3"
                    }
                }
            ]
        },
        {
            "id": "5",
            "user_id": "2",
            "name": "Ento",
            "url": "entomology.tamu.edu/*",
            "comment": "",
            "created_at": "0000-00-00 00:00:00",
            "updated_at": "0000-00-00 00:00:00",
            "searches": [
                {
                    "id": "2",
                    "user_id": "2",
                    "name": "COALS All",
                    "label": "_cse_gjh28cnt",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "site_id": "5",
                        "search_id": "2"
                    }
                },
                {
                    "id": "3",
                    "user_id": "2",
                    "name": "COALS Departments",
                    "label": "_cse_in382nd9",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "site_id": "5",
                        "search_id": "3"
                    }
                }
            ]
        }
    ]
}
```

### Retrieving a single site

__Request__
```
GET domain.com/api/v1/sites/{id}
```

__Response__
```
{
    "error": false,
    "site": {
        "id": "5",
        "user_id": "2",
        "name": "Ento",
        "url": "entomology.tamu.edu/*",
        "comment": "",
        "created_at": "0000-00-00 00:00:00",
        "updated_at": "0000-00-00 00:00:00",
        "searches": [
            {
                "id": "2",
                "user_id": "2",
                "name": "COALS All",
                "label": "_cse_gjh28cnt",
                "created_at": "0000-00-00 00:00:00",
                "updated_at": "0000-00-00 00:00:00",
                "pivot": {
                    "site_id": "5",
                    "search_id": "2"
                }
            },
            {
                "id": "3",
                "user_id": "2",
                "name": "COALS Departments",
                "label": "_cse_in382nd9",
                "created_at": "0000-00-00 00:00:00",
                "updated_at": "0000-00-00 00:00:00",
                "pivot": {
                    "site_id": "5",
                    "search_id": "3"
                }
            }
        ]
    }
}
```
### Creating a new site

__Request__
```
POST domain.com/api/v1/sites?name=Site%20Name&url=http%3A%2F%2Fgoogle.com&comment=Your%20comment%20goes%20here%20%28optional%29&searches=%5B2%2C%203%5D
```

__Response__
```
{
    "error": false,
    "site": {
        "user_id": "2",
        "name": "Site Name",
        "url": "http://google.com",
        "comment": "Your comment goes here (optional)",
        "updated_at": "2013-08-21 19:01:56",
        "created_at": "2013-08-21 19:01:56",
        "id": 9,
        "searches": [
            {
                "id": "2",
                "user_id": "2",
                "name": "COALS All",
                "label": "_cse_gjh28cnt",
                "created_at": "0000-00-00 00:00:00",
                "updated_at": "0000-00-00 00:00:00",
                "pivot": {
                    "site_id": "9",
                    "search_id": "2"
                }
            },
            {
                "id": "3",
                "user_id": "2",
                "name": "COALS Departments",
                "label": "_cse_in382nd9",
                "created_at": "0000-00-00 00:00:00",
                "updated_at": "0000-00-00 00:00:00",
                "pivot": {
                    "site_id": "9",
                    "search_id": "3"
                }
            }
        ]
    }
}
```

### Updating a site

This is the same as creating a site except use PUT instead of POST. You can send any or all fields for updating.

### Deleting a site

__Request__
```
DELETE domain.com/api/v1/sites/{id}
```

__Response__
```
{
    "error": false,
    "message": "Site deleted"
}
```

## Searche API Endpoints

### Getting a list of searches

__Request__
```
GET domain.com/api/v1/searches
```

__Response__
```
{
    "error": false,
    "searches": [
        {
            "id": "2",
            "user_id": "2",
            "name": "COALS All",
            "label": "_cse_gjh28cnt",
            "created_at": "0000-00-00 00:00:00",
            "updated_at": "0000-00-00 00:00:00",
            "sites": [
                {
                    "id": "3",
                    "user_id": "2",
                    "name": "COALS",
                    "url": "aglifesciences.tamu.edu/*",
                    "comment": "Main COALS site",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "search_id": "2",
                        "site_id": "3"
                    }
                },
                {
                    "id": "4",
                    "user_id": "2",
                    "name": "Ag Economics",
                    "url": "ageco.tamu.edu/*",
                    "comment": "AECO Department site",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "search_id": "2",
                        "site_id": "4"
                    }
                },
                {
                    "id": "5",
                    "user_id": "2",
                    "name": "Ento",
                    "url": "entomology.tamu.edu/*",
                    "comment": "",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "search_id": "2",
                        "site_id": "5"
                    }
                },
                {
                    "id": "9",
                    "user_id": "2",
                    "name": "Site Name",
                    "url": "http://google.com",
                    "comment": "Your comment goes here (optional)",
                    "created_at": "2013-08-21 19:01:56",
                    "updated_at": "2013-08-21 19:01:56",
                    "pivot": {
                        "search_id": "2",
                        "site_id": "9"
                    }
                }
            ]
        },
        {
            "id": "3",
            "user_id": "2",
            "name": "COALS Departments",
            "label": "_cse_in382nd9",
            "created_at": "0000-00-00 00:00:00",
            "updated_at": "0000-00-00 00:00:00",
            "sites": [
                {
                    "id": "4",
                    "user_id": "2",
                    "name": "Ag Economics",
                    "url": "ageco.tamu.edu/*",
                    "comment": "AECO Department site",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "search_id": "3",
                        "site_id": "4"
                    }
                },
                {
                    "id": "5",
                    "user_id": "2",
                    "name": "Ento",
                    "url": "entomology.tamu.edu/*",
                    "comment": "",
                    "created_at": "0000-00-00 00:00:00",
                    "updated_at": "0000-00-00 00:00:00",
                    "pivot": {
                        "search_id": "3",
                        "site_id": "5"
                    }
                },
                {
                    "id": "9",
                    "user_id": "2",
                    "name": "Site Name",
                    "url": "http://google.com",
                    "comment": "Your comment goes here (optional)",
                    "created_at": "2013-08-21 19:01:56",
                    "updated_at": "2013-08-21 19:01:56",
                    "pivot": {
                        "search_id": "3",
                        "site_id": "9"
                    }
                }
            ]
        }
    ]
}
```

### Retrieving a single search

__Request__
```
GET domain.com/api/v1/searches/3
```

__Response__
```
{
    "error": false,
    "site": {
        "id": "3",
        "user_id": "2",
        "name": "COALS Departments",
        "label": "_cse_in382nd9",
        "created_at": "0000-00-00 00:00:00",
        "updated_at": "0000-00-00 00:00:00",
        "sites": [
            {
                "id": "4",
                "user_id": "2",
                "name": "Ag Economics",
                "url": "ageco.tamu.edu/*",
                "comment": "AECO Department site",
                "created_at": "0000-00-00 00:00:00",
                "updated_at": "0000-00-00 00:00:00",
                "pivot": {
                    "search_id": "3",
                    "site_id": "4"
                }
            },
            {
                "id": "5",
                "user_id": "2",
                "name": "Ento",
                "url": "entomology.tamu.edu/*",
                "comment": "",
                "created_at": "0000-00-00 00:00:00",
                "updated_at": "0000-00-00 00:00:00",
                "pivot": {
                    "search_id": "3",
                    "site_id": "5"
                }
            },
            {
                "id": "9",
                "user_id": "2",
                "name": "Site Name",
                "url": "http://google.com",
                "comment": "Your comment goes here (optional)",
                "created_at": "2013-08-21 19:01:56",
                "updated_at": "2013-08-21 19:01:56",
                "pivot": {
                    "search_id": "3",
                    "site_id": "9"
                }
            }
        ]
    }
}
```

### Creating a new search

__Request__
```
POST domain.com/api/v1/searches?name=Site%20Name&label=_cse_dn891ng
```

__Response__
```
{
    "error": false,
    "search": {
        "user_id": "2",
        "name": "Site Name",
        "label": "_cse_dn891ng",
        "updated_at": "2013-08-21 19:14:13",
        "created_at": "2013-08-21 19:14:13",
        "id": 6
    }
}
```

### Updating a search

This is the same as creating a search except you use PUT instead of POST. You can send any or all fields for updating.

### Deleting a search

__Request__
```
DELETE domain.com/api/v1/searches/6
```

__Response__
```
{
    "error": false,
    "message": "Search deleted"
}
```
## XML Annotations File

Google Custom Search allows for external annotations files to configure custom searches. See documentation [here](https://developers.google.com/custom-search/docs/annotations#host).

You can point GCS to the annotations file with the following URL:
```
domain.com/searches/{search_id}.xml
```

This will return the properly formatted annotations file.

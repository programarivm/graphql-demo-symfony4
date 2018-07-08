## GraphQL Demo for Symfony 4

This is a minimum set up to show how to use [GraphQLBundle](https://github.com/Youshido/GraphQLBundle) in Symfony 4 projects, and is an equivalent of [Youshido/GraphQLDemoApp](https://github.com/Youshido/GraphQLDemoApp/blob/master/README.md) -- a GraphQL demo for Symfony 3.

GraphQL Demo for Symfony 4 is been built with the feedback and comments made at https://github.com/Youshido/GraphQLBundle/issues/68.

### How to Run

    docker-compose up --build

### Sending Requests

Now you can easily send request to endpoint, for example:

    $ curl -XPOST 'http://127.0.0.1:8000/graphql'

Response:

    {
        "errors": [
            {
                "message": "Must provide an operation."
            }
        ]
    }

### TODOs

At this moment there's no data available, so the following request:

    $ curl -XPOST 'http://127.0.0.1:8000/graphql' -F 'query={ todos { id } }'

Will return this response:

    {
        "data": {
            "todos": null
        },
        "errors": [
            {
                "message": "You have requested a non-existent service \u0022resolver.todo\u0022."
            }
        ]
    }

However, it has to return something similar to this:

    {
        "data": {
            "todos": [
              {
                "id": 129
              }
            ]
        }
    }

> Note that `docker-compose.yml` is assuming that a MySQL database is going to be used, however this demo could be even simpler without any database. The objective is to set up a minimal GraphQL API. Any ideas are welcome!

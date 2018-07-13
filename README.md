## GraphQL Demo for Symfony 4

This is a simple demo that shows how to use [GraphQLBundle](https://github.com/Youshido/GraphQLBundle) in Symfony 4 projects, and is an equivalent of [Youshido/GraphQLDemoApp](https://github.com/Youshido/GraphQLDemoApp/blob/master/README.md) -- a GraphQL demo for Symfony 3.

This Hello World app is been set up with the comments made in this discussion: [Symfony 4 support](https://github.com/Youshido/GraphQLBundle/issues/68).

### How to Run

Install dependencies:

    composer install

Run the web server:

    php -S 127.0.0.1:8085 -t public

### Examples

Request:

    $ curl -XPOST 'http://localhost:8085/graphql'

Response:

    {
        "errors": [
            {
                "message": "Must provide an operation."
            }
        ]
    }

Request:

    $ curl -XPOST 'http://localhost:8085/graphql' -F 'query={ greeting }'

Response:

    {
        "data": {
            "greeting": "Hello world!"
        }
    }

## 2. Contributions

Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "GraphQL Demo for Symfony 4"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)
- Say hello on [Google+](https://plus.google.com/+Programarivm)

Many thanks.

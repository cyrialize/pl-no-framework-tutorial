# What is this?

This code is a result of me working through [Patrick Louys No Framework Tutorial](https://github.com/PatrickLouys/no-framework-tutorial).

# Differences

There are some changes I've made from what is lined out within the tutorial, they are:

- Using [Symfony's HTTPFoundation Component](https://github.com/symfony/http-foundation) instead of [Patrick Louys' HTTP Component](https://github.com/PatrickLouys/http)
  - Including an HTTP component occurs in [step 4](https://github.com/PatrickLouys/no-framework-tutorial/blob/master/04-http.md) of the tutorial

# Tips
- Run `php -S localhost:8000` in the `public/` directory - not the root directory of the entire project, this is small mistake I made often while going through the tutorial
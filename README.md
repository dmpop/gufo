# Gufo

Gufo is a PHP-based a search front end that pulls data from multiple search engines (Google, Qwant, and DuckDuckGo) and scrubs all the capitalist crud off the results. It also offers open-source privacy-oriented interfaces to popular services like YouTube and Reddit. All Wikipedia search queries are piped through Wikiless. Gufo is a fork of the [AstianGO](https://gitlab.com/astiango/astian-search) project.

## Requirements

- PHP
- PHP-XML and PHP-CURL libraries
- Web server (Apache, Lighttpd, or similar)
- Git (optional)

## Installation and usage

1. Make sure that your local machine or remote web server has PHP with the required libraries installed.
2. Clone the project's repository using the `git clone https://github.com/dmpop/gufo.git` command. Alternatively, download the latest source code using the appropriate button on the project's page.

To run Gufo locally, switch in the terminal to the _gufo_ directory,  run the `php -S 127.0.0.1:8000` command, and point the browser to the _127.0.0.1:8000_ address.

To install Gufo on a web server with PHP, move the files in the _gufo_ directory to the document root of your server.

## Problems?

Please report bugs and issues in the [Issues](https://github.com/dmpop/gufo/issues) section.

## Contribute

If you've found a bug or have a suggestion for improvement, open an issue in the [Issues](https://github.com/dmpop/gufo/issues) section.

To add a new feature or fix issues yourself, follow the following steps.

1. Fork the project's repository.
2. Create a feature branch using the `git checkout -b new-feature` command.
3. Add your new feature or fix bugs and run the `git commit -am 'Add a new feature'` command to commit changes.
4. Push changes using the `git push origin new-feature` command.
5. Submit a merge request.

## Author

[Dmitri Popov](https://www.tokyoma.de/)

# License

The [GNU General Public License version 3](http://www.gnu.org/licenses/gpl-3.0.en.html)

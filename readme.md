HelloSlim
=========

A starter kit for small PHP Projects containing the [Slim](http://www.slimframework.com/) microframework, [Twig](http://twig.sensiolabs.org/) as Template Engine and [ReadBeanPHP](http://redbeanphp.com/) as ORM.
PHPUnit is there, just for you to use :P

Installation
------------
Installation is really easy:

* Create a local virtualhost. You can follow [this guide](https://www.digitalocean.com/community/articles/how-to-set-up-apache-virtual-hosts-on-ubuntu-12-04-lts) for Apache & Linux
* [Install PHPUnit](http://phpunit.de/manual/current/en/installation.html) if you didn't do it before.
* Clone the repository ```git clone https://github.com/napolux/helloslim.git```
* Launch ```php composer.phar update```.
* Launch the basic test ```phpunit tests/SetupTest.php``` and make it green, just to be sure everything is fine with the setup (it's just a true == true test).
* Enjoy

Legal stuff
-----------
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
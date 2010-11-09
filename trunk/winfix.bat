cd script
del solar
mklink solar ..\source\solar\script\solar
cd ..

cd include
del Solar.php
mklink Solar.php ..\source\solar\Solar.php
del Solar
mklink /D Solar ..\source\solar\Solar
cd ..

cd include\Test
del Solar.php
mklink Solar.php ..\..\source\solar\tests\Test\Solar.php
del Solar
mklink /D Solar ..\..\source\solar\tests\Test\Solar
cd ..\..

cd include\Mock
del Solar
mklink /D Solar ..\..\source\solar\tests\Mock\Solar
cd ..\..

cd include\Fixture
del Solar
mklink /D Solar ..\..\source\solar\tests\Fixture\Solar
cd ..\..

cd docroot\public\Solar\View\Helper
del Pager
mklink Pager ..\..\..\..\..\include\Solar\View\Helper\Pager\Public
cd ..\..\..\..\..

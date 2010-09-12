REM must run as administrator

cd script
del solar
mklink solar ..\source\solar\script\solar
cd ..

cd include
del Solar.php
mklink Solar.php ..\source\solar\Solar.php
rmdir Solar
mklink /D Solar ..\source\solar\Solar
cd ..

cd include/Test
del Solar.php
mklink Solar.php ..\..\source\solar\tests\Test\Solar.php
rmdir Solar
mklink /D Solar ..\..\source\solar\tests\Test\Solar
cd ..\..

cd include/Mock
rmdir Solar
mklink /D Solar ..\..\source\solar\tests\Mock\Solar
cd ..\..

cd include/Fixture
rmdir Solar
mklink /D Solar ..\..\source\solar\tests\Fixture\Solar
cd ..\..

REM still need to link public resources.
REM can we do that with `php script\solar link-public Solar` at this point?


<?php

require_once '../repo/src/Krautoload.php';

$krautoload = Krautoload::start();

$krautoload->namespacePSR0('MyVendor\MyPackage', 'src-psr0');

new MyVendor\MyPackage\Foo\Bar\Baz();
new MyVendor\MyPackage\Foo_Bar_BazUnderscore();

$krautoload->namespacePSRX('VendorX\PackageX', 'src-psrx');

new VendorX\PackageX\Foo\Bar\Baz();
new VendorX\PackageX\Foo_Bar_Baz();

$krautoload->prefixPEAR('Foo', 'src-pear');

new Foo_Bar_Baz();

$krautoload->namespacePSR0('', 'src-psr0-global');

new FooGlobal\Bar\BazNamespace();
new FooGlobal_Bar_BazUnderscore();

# get the latest wsdltophp.phar
if [ ! -f wsdltophp.phar ]; then
    echo "Download wsdltophp.phar once";
    wget https://phar.wsdltophp.com/wsdltophp.phar;
fi

# get current folder
DEST=`pwd`;

# clean current folder
rm -rf  $DEST/src/ \
        $DEST/tutorial.php \
        $DEST/composer.json \
        $DEST/composer.lock;

# package informations
php wsdltophp.phar generate:package \
    --urlorpath=$DEST"/wsdl/services.wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-ews" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="\SoapClient\SoapClientBase" \
    --prefix="Ews";

# generate package
php wsdltophp.phar generate:package \
    --urlorpath=$DEST"/wsdl/services.wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-ews" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="\SoapClient\SoapClientBase" \
    --prefix="Ews" \
    --force;
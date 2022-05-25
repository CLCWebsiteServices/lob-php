<?php
/**
 * CardOrdersApiTest
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Model\CardOrderEditable;
use \OpenAPI\Client\Model\CardUpdatable;
use \OpenAPI\Client\Api\CardOrdersApi;
use \OpenAPI\Client\Api\CardsApi;
use \OpenAPI\Client\Model\CardEditable;

/**
 * CardOrdersApiSpecTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class CardOrdersApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $cardOrdersApi;
    private static $cardApi;
    private static $cardId;
    private static $editableCardOrder;
    private static $errorCardOrder;
    private static $co1;
    private static $co2;
    private static $co3;

    // for teardown post-testing
    private $idsForCleanup = [];

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        // create instance of CardOrdersApi
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
        self::$cardOrdersApi = new CardOrdersApi(self::$config);
        
        // create a card which the card orders will be affiliated with
        self::$cardApi = new CardsApi(self::$config);
        $editableCard = new CardEditable();
        $editableCard->setFront("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/card_horizontal.pdf");
        $editableCard->setBack("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/card_horizontal.pdf");
        $editableCard->setSize(CardEditable::SIZE__2_125X3_375);
        self::$cardId = self::$cardApi->create($editableCard)->getId();

        self::$editableCardOrder = new CardOrderEditable();
        self::$editableCardOrder->setQuantity(10000);

        self::$errorCardOrder = new CardOrderEditable();
        self::$errorCardOrder->setQuantity(100);

        // for List
        self::$co1 = new CardOrderEditable();
        self::$co1->setQuantity(10000);

        self::$co2 = new CardOrderEditable();
        self::$co2->setQuantity(10000);

        self::$co3 = new CardOrderEditable();
        self::$co3->setQuantity(10000);
    }

    public static function tearDownAfterClass(): void
    {
        self::$cardApi->delete(self::$cardId);
    }

    public function testCardOrdersApiInstantiation200() {
        try {
            $cardOrdersApi200 = new CardOrdersApi(self::$config);
            $this->assertEquals(gettype($cardOrdersApi200), 'object');
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    public function testCreate200()
    {
        try {
            $createdCardOrder = self::$cardOrdersApi->create(self::$cardId, self::$editableCardOrder);
            $this->assertMatchesRegularExpression('/co_/', $createdCardOrder->getId());
            array_push($this->idsForCleanup, $createdCardOrder->getId());
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    // does not include required field in request
    public function testCreate422()
    {
        
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Number of cards in order must be at least 10000/");
            $errorResponse = self::$cardOrdersApi->create(self::$cardId, self::$errorCardOrder);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    // uses a bad key to attempt to send a request
    public function testCardOrdersApi401() {
        try {
            $wrongConfig = new Configuration();
            $wrongConfig->setApiKey('basic', 'BAD KEY');
            $cardOrdersApiError = new CardOrdersApi($wrongConfig);

            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
            $errorResponse = $cardOrdersApiError->create(self::$cardId, self::$editableCardOrder);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    public function testRetrieve200()
    {
        $this->markTestSkipped("Cannot properly test this until the SDK is regenerated and all bugs are solved");
        $nextUrl = "";
        $previousUrl = "";
        try {
            $cardOrder1 = self::$cardOrdersApi->create(self::$cardId, self::$co1);
            $cardOrder2 = self::$cardOrdersApi->create(self::$cardId, self::$co2);
            $cardOrder3 = self::$cardOrdersApi->create(self::$cardId, self::$co3);
            $listedCardOrders = self::$cardOrdersApi->get(self::$cardId);
            $this->assertGreaterThan(1, count($listedCardOrders->getData()));
            $this->assertLessThanOrEqual(3, count($listedCardOrders->getData()));
            $nextUrl = substr($listedCardOrders->getNextUrl(), strrpos($listedCardOrders->getNextUrl(), "after=") + 6);
            $this->assertIsString($nextUrl);
        } catch (Exception $listError) {
            echo 'Caught exception: ',  $listError->getMessage(), "\n";
        }

        // response using nextUrl
        if ($nextUrl != "") {
            try {
                $cardOrder1 = self::$cardOrdersApi->create(self::$cardId, self::$co1);
                $cardOrder2 = self::$cardOrdersApi->create(self::$cardId, self::$co2);
                $cardOrder3 = self::$cardOrdersApi->create(self::$cardId, self::$co3);
                $listedCardsAfter = self::$cardOrdersApi->get(3, null, $nextUrl);
                $this->assertGreaterThan(1, count($listedCardsAfter->getData()));
                $this->assertLessThanOrEqual(3, count($listedCardsAfter->getData()));
                $previousUrl = substr($listedCardsAfter->getPreviousUrl(), strrpos($listedCardsAfter->getPreviousUrl(), "before=") + 7);
                $this->assertIsString($previousUrl);
            } catch (Exception $listError) {
                echo 'Caught exception: ',  $listError->getMessage(), "\n";
            }
        }

        // response using previousUrl
        if ($previousUrl != "") {
            try {
                $cardOrder1 = self::$cardOrdersApi->create(self::$cardId, self::$co1);
                $cardOrder2 = self::$cardOrdersApi->create(self::$cardId, self::$co2);
                $cardOrder3 = self::$cardOrdersApi->create(self::$cardId, self::$co3);
                $listedCardsBefore = self::$cardOrdersApi->get(3, $previousUrl);
                $this->assertGreaterThan(1, count($listedCardsBefore->getData()));
                $this->assertLessThanOrEqual(3, count($listedCardsBefore->getData()));
            } catch (Exception $listError) {
                echo 'Caught exception: ',  $listError->getMessage(), "\n";
            }
        }
    }
}

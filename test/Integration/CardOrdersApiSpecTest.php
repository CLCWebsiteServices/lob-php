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
    private static $invalidCardOrdersApi;
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

        $invalidConfig = new Configuration();
        $invalidConfig->setApiKey("basic", "Totally Fake Key");
        self::$invalidCardOrdersApi = new CardOrdersApi($invalidConfig);

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

    /**
     * @group integration
     * @group cardOrders
     */
    public function testCardOrdersApiInstantiation200() {
        try {
            $cardOrdersApi200 = new CardOrdersApi(self::$config);
            $this->assertEquals(gettype($cardOrdersApi200), 'object');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group cardOrders
     */
    public function testCreate200()
    {
        try {
            $createdCardOrder = self::$cardOrdersApi->create(self::$cardId, self::$editableCardOrder);
            $this->assertMatchesRegularExpression('/co_/', $createdCardOrder->getId());
            array_push($this->idsForCleanup, $createdCardOrder->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group cardOrders
     */
    // does not include required field in request
    public function testCreate422()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/Number of cards in order must be at least 10000/");
        $errorResponse = self::$cardOrdersApi->create(self::$cardId, self::$errorCardOrder);
    }

    /**
     * @group integration
     * @group cardOrders
     */
    // uses a bad key to attempt to send a request
    public function testCardOrdersApi401() {
        $wrongConfig = new Configuration();
        $wrongConfig->setApiKey('basic', 'BAD KEY');
        $cardOrdersApiError = new CardOrdersApi($wrongConfig);

        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
        $errorResponse = $cardOrdersApiError->create(self::$cardId, self::$editableCardOrder);
    }

    /**
     * @group integration
     * @group cardOrders
     */
    public function testRetrieve200()
    {
        try {
            $cardOrder1 = self::$cardOrdersApi->create(self::$cardId, self::$co1);
            $cardOrder2 = self::$cardOrdersApi->create(self::$cardId, self::$co2);
            $cardOrder3 = self::$cardOrdersApi->create(self::$cardId, self::$co3);
            $cardOrder4 = self::$cardOrdersApi->create(self::$cardId, self::$co1);
            $cardOrder5 = self::$cardOrdersApi->create(self::$cardId, self::$co2);
            $cardOrder6 = self::$cardOrdersApi->create(self::$cardId, self::$co3);

            $listedCardOrders = self::$cardOrdersApi->get(self::$cardId, 6);
            $this->assertGreaterThan(1, count($listedCardOrders->getData()));
            $this->assertLessThanOrEqual(6, count($listedCardOrders->getData()));
            $this->assertEquals(count($listedCardOrders->getData()), $listedCardOrders->getCount());

            // response using offset
            $listCardOrders = [$cardOrder3, $cardOrder2, $cardOrder1]; // they'll be listed from newest to oldest
            $listedCardsAfter = self::$cardOrdersApi->get(self::$cardId, 3, 3);

            for ($ind = 0; $ind < 3; $ind++) {
                $this->assertEquals($listedCardsAfter->getData()[$ind]->getId(), $listCardOrders[$ind]->getId());
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testRetrieve404()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/card not found/");
        $badRetrieval = self::$cardOrdersApi->get("card_fakeId");
    }

    public function testRetrieve0()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches("/Missing the required parameter/");
        $badRetrieval = self::$cardOrdersApi->get(null);
    }
}
<?php
/**
 * CardOrdersApiUnitTest
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

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;

use OpenAPI\Client\Api\CardOrdersApi;
use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\CardOrder;
use OpenAPI\Client\Model\CardOrderEditable;
use PHPUnit\Framework\TestCase;


/**
 * CardOrderApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class CardOrdersApiUnitTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $mockCardId;
    private static $mockCardOrderId;
    private static $mockEditableCardOrder;
    private static $mockCardOrderResponse;



    // set up constant fixtures
    public function setUp(): void
    {
        self::$mockCardId = "card_fakeId";
        self::$mockCardOrderId = "co_fakeId";
        self::$mockEditableCardOrder = new CardOrderEditable();

        self::$mockCardOrderResponse = new CardOrder();
        self::$mockCardOrderResponse->setId(self::$mockCardOrderId);
    }

    /** ***** ***** *****
     * Create
     * ***** ***** *****/

    /**
     * @group unit
     * @group cardorder
     */
    public function testCreateConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrdersApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $cardOrdersApi->create(self::$mockCardId, self::$mockEditableCardOrder);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testCreate()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrdersApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockCardOrderResponse));
        try {
            $happyPath = $cardOrdersApi->create(self::$mockCardId, self::$mockEditableCardOrder);
            $this->assertEquals($happyPath->getId(), self::$mockCardOrderId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    // ToDo: public function testCreateWithCustomHeaders()

    /**
     * @group unit
     * @group cardorder
     */
    public function testCreateWithIdempotency()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrdersApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockCardOrderResponse));
        try {
            $happyPath = $cardOrdersApi->create(self::$mockCardId, self::$mockEditableCardOrder);
            $this->assertEquals($happyPath->getId(), self::$mockCardOrderId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testCreateFailBadRecord()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrdersApi = new CardOrdersApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $cardOrdersApi->create(self::$mockCardId, []);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testCreateMalformedRequest()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrdersApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new ApiException("forced error", 422));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/forced error/");
            $unhappyPath = $cardOrdersApi->create(self::$mockCardId, self::$mockEditableCardOrder);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testCreateFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrdersApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $cardOrdersApi->create(self::$mockCardId, self::$mockEditableCardOrder);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testCreateFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrdersApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $cardOrdersApi->create(self::$mockCardId, self::$mockEditableCardOrder);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * Get
     * ***** ***** *****/

    /**
     * @group unit
     * @group cardorder
     */
    public function testGetConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrdersApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $cardOrdersApi->get(self::$mockCardId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    // ToDo: testGet()

    /**
     * @group unit
     * @group cardorder
     */
    public function testGetFailNullId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrderApi = new CardOrdersApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $cardOrderApi->get(null);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testGetFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrderApi = new CardOrdersApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $cardOrderApi->get("Narp");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testGetFail()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrderApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new ApiException("address not found", 404));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/address not found/");
            $unhappyPath = $cardOrderApi->get("card_BADID");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testGetApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrderApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new Response(401, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $cardOrderApi->get(self::$mockCardId);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group cardorder
     */
    public function testGetFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $cardOrderApi = new CardOrdersApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $cardOrderApi->get(self::$mockCardId);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * List
     * ***** ***** *****/


    /** ***** ***** *****
     * Update
     * ***** ***** *****/


    /** ***** ***** *****
     * Delete
     * ***** ***** *****/

}

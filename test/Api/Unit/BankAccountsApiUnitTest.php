<?php
/**
 * BankAccountsApiTest
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
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ConnectException;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\BankAccount;
use OpenAPI\Client\Model\BankAccountDeletion;
use OpenAPI\Client\Model\BankAccountList;
use OpenAPI\Client\Model\BankAccountVerify;
use OpenAPI\Client\Model\BankAccountWritable;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Api\BankAccountsApi;

/**
 * BankAccountsApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class BankAccountsApiUnitTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $mockBankId;
    private static $mockWritableBankAccount;
    private static $mockBankAccountResponse;
    private static $mockBankAccountList;
    private static $mockDeletedBankAccount;

    // set up constant fixtures
    public function setUp(): void
    {
        self::$mockBankId = "bank_fakeId";
        self::$mockWritableBankAccount = new BankAccountWritable();

        self::$mockBankAccountResponse = new BankAccount();
        self::$mockBankAccountResponse->setId(self::$mockBankId);

        // BankAccounts List Fixture
        self::$mockBankAccountList = new BankAccountList();
        $item1 = new BankAccount();
        $item2 = new BankAccount();
        $item3 = new BankAccount();
        $item1->setId("bank_fakeId1");
        $item2->setId("bank_fakeId2");
        $item3->setId("bank_fakeId3");

        self::$mockBankAccountList->setData(array ($item1,$item2,$item3));
        self::$mockBankAccountList->setObject("list");
        self::$mockBankAccountList->setCount("3");

        // BankAccount Delete Fixture
        self::$mockDeletedBankAccount = new BankAccountDeletion();
        self::$mockDeletedBankAccount->setId("bank_fakeIdForDel");
        self::$mockDeletedBankAccount->setDeleted(true);
    }

    /** ***** ***** *****
     * Create
     * ***** ***** *****/

    /**
     * @group unit
     * @group bank_account
     */
    public function testCreateConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $bankAccountsApi->create(self::$mockWritableBankAccount);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testCreate()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]); 
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockBankAccountResponse));
        try {
            $happyPath = $bankAccountsApi->create(self::$mockWritableBankAccount);
            $this->assertEquals($happyPath->getId(), self::$mockBankId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    // ToDo: public function testBankAccountCreateWithCustomHeaders()

    /**
     * @group unit
     * @group bank_account
     */
    public function testCreateFailBadBankAccount()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $bankAccountsApi->create([]);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testCreateMalformedRequest()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new ApiException("forced error", 422));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/forced error/");
            $unhappyPath = $bankAccountsApi->create(self::$mockWritableBankAccount);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testCreateFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));

        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $bankAccountsApi->create(self::$mockWritableBankAccount);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group address
     */
    public function testCreateFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $bankAccountsApi->create(self::$mockWritableBankAccount);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * Get
     * ***** ***** *****/

    /**
     * @group unit
     * @group bank_account
     */
    public function testGetConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $bankAccountsApi->get(self::$mockBankId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testGet()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockBankAccountResponse));
        try {
            $happyPath = $bankAccountsApi->get(self::$mockBankId);
            $this->assertEquals($happyPath->getId(), self::$mockBankId);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testGetFailNullId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $bankAccountsApi->get(null);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testGetFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $bankAccountsApi->get("Narp");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testGetFail()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new ApiException("bank account not found", 404));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/bank account not found/");
            $unhappyPath = $bankAccountsApi->get("bank_BADID");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testGetApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(401, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $bankAccountsApi->get(self::$mockBankId);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testGetFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $bankAccountsApi->get(self::$mockBankId);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * List
     * ***** ***** *****/

    /**
     * @group unit
     * @group bank_account
     */
    public function testListConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $errorResponse = $bankAccountsApi->list(3);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testList()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockBankAccountList));

        try {
            $happyPath = $bankAccountsApi->list(3);
            $this->assertEquals(3, count($happyPath->getData()));
            $data = $happyPath->getData();
            $this->assertEquals($data[0]->getId(), "bank_fakeId1");
            $this->assertEquals($data[1]->getId(), "bank_fakeId2");
            $this->assertEquals($data[2]->getId(), "bank_fakeId3");
        } catch (Exception $listError) {
            echo 'Caught exception: ',  $listError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testListFailBadParamsLargeLimit()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $bankAccountsApi->list(1000);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testListFailBadParamsNegativeLimit()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $bankAccountsApi->list(-1);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testListFailBadParamsLargeMetadata()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $bankAccountsApi->list(10, null, null, null, null, str_repeat("N", 600));
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testListFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $bankAccountsApi->list(3);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testListFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $bankAccountsApi->list(3);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    // ToDo: public function testListPagination()

    /** ***** ***** *****
     * Delete
     * ***** ***** *****/

    /**
     * @group unit
     * @group bank_account
     */
    public function testDeleteConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $bankAccountsApi->delete(self::$mockBankId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testDelete()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockDeletedBankAccount));
        try {
            $happyPath = $bankAccountsApi->delete("bank_fakeIdForDel");
            $this->assertEquals($happyPath->getDeleted(), true);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ',  $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testDeleteFailMissingId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $bankAccountsApi->delete(null);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testDeleteFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $bankAccountsApi->delete("NOPE");
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testDeleteFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $bankAccountsApi->delete("bank_fakeIdForDel");
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testDeleteFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $bankAccountsApi->delete("bank_fakeIdForDel");
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * Verify
     * ***** ***** *****/

    /**
     * @group unit
     * @group bank_account
     */
    public function testVerifyConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $verify = new BankAccountVerify(array("amounts" => [1, 2]));
            $unhappyPath = $bankAccountsApi->verify(self::$mockBankId, $verify);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testVerify() {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockBankAccountResponse));
        try {
            $verify = new BankAccountVerify(array("amounts" => [1, 2]));
            $happyPath = $bankAccountsApi->verify(self::$mockBankId, $verify);
            $this->assertEquals($happyPath->getId(), self::$mockBankId);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testVerifyFail() {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new ApiException("forced api error", 404));
        try {
            $verify = new BankAccountVerify(array("amounts" => [1, 2]));

            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/forced api error/");
            $unhappyPath = $bankAccountsApi->verify("bank_BADID", $verify);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testVerifyFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(\InvalidArgumentException::class);
            $verify = new BankAccountVerify(array("amounts" => [1, 2]));
            $errorResponse = $bankAccountsApi->verify("NOPE", $verify);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testVerifyFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $verify = new BankAccountVerify(array("amounts" => [1, 2]));
            $errorResponse = $bankAccountsApi->verify(self::$mockBankId, $verify);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group bank_account
     */
    public function testVerifyFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $bankAccountsApi = new BankAccountsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $verify = new BankAccountVerify(array("amounts" => [1, 2]));
            $errorResponse = $bankAccountsApi->verify(self::$mockBankId, $verify);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }
}

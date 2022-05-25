<?php
/**
 * SelfMailerListTest
 *
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
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use OpenAPI\Client\Model\SelfMailerList;
use PHPUnit\Framework\TestCase;

/**
 * SelfMailerListTest Class Doc Comment
 *
 * @category    Class
 * @description SelfMailerList
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SelfMailerListTest extends TestCase
{

    /**
     * Test attribute "data"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyData()
    {
        $list = new SelfMailerList();
        $list->setData([]);
        $this->assertEquals($list->getData(), []);
    }

    /**
     * Test attribute "next_url"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyNextUrl()
    {
        $list = new SelfMailerList();
        $list->setNextUrl('fake url');
        $this->assertEquals($list->getNextUrl(), 'fake url');
    }

    /**
     * Test attribute "next_url"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyNextPageToken()
    {
        $list = new SelfMailerList();
        $list->setNextUrl('fake url?after=fake_token');
        $this->assertEquals($list->getNextPageToken(), 'fake_token');
    }

    /**
     * Test attribute "next_url"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyNextPageTokenNoToken()
    {
        $list = new SelfMailerList();
        $this->assertEquals($list->getNextPageToken(), null);
    }

    /**
     * Test attribute "previous_url"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyPreviousUrl()
    {
        $list = new SelfMailerList();
        $list->setPreviousUrl('fake url');
        $this->assertEquals($list->getPreviousUrl(), 'fake url');
    }

    /**
     * Test attribute "previous_url"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyPreviousPageToken()
    {
        $list = new SelfMailerList();
        $list->setPreviousUrl('fake url?before=fake_token');
        $this->assertEquals($list->getPreviousPageToken(), 'fake_token');
    }

    /**
     * Test attribute "previous_url"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyPreviousPageTokenNoToken()
    {
        $list = new SelfMailerList();
        $this->assertEquals($list->getPreviousPageToken(), null);
    }

    /**
     * Test attribute "count"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyCount()
    {
        $list = new SelfMailerList();
        $list->setCount(1);
        $this->assertEquals($list->getCount(), 1);
    }

    /**
     * Test attribute "total_count"
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testPropertyTotalCount()
    {
        $list = new SelfMailerList();
        $list->setTotalCount(1);
        $this->assertEquals($list->getTotalCount(), 1);
    }

    /**
     * Tests for alternative property accessors
     * @group self_mailer
     * @group unit
     * @group model
     */
    public function testGenericProperties()
    {
        $list = new SelfMailerList();
        $list->offsetSet('object', 'list');
        $this->assertEquals($list->offsetExists('object'), true);
        $this->assertEquals($list->offsetGet('object'), 'list');
        $list->offsetUnset('object');
        $this->assertEquals($list->offsetGet('object'), null);
    }
}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Tests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A Test describes a single client method call and its expected result.
 * </pre>
 *
 * Protobuf type <code>tests.Test</code>
 */
class Test extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * short description of the test
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    private $description = '';
    protected $test;

    public function __construct() {
        \GPBMetadata\Test::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * short description of the test
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * short description of the test
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <code>.tests.GetTest get = 2;</code>
     */
    public function getGet()
    {
        return $this->readOneof(2);
    }

    /**
     * <code>.tests.GetTest get = 2;</code>
     */
    public function setGet(&$var)
    {
        GPBUtil::checkMessage($var, \Tests\GetTest::class);
        $this->writeOneof(2, $var);
    }

    /**
     * <code>.tests.CreateTest create = 3;</code>
     */
    public function getCreate()
    {
        return $this->readOneof(3);
    }

    /**
     * <code>.tests.CreateTest create = 3;</code>
     */
    public function setCreate(&$var)
    {
        GPBUtil::checkMessage($var, \Tests\CreateTest::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <code>.tests.SetTest set = 4;</code>
     */
    public function getSet()
    {
        return $this->readOneof(4);
    }

    /**
     * <code>.tests.SetTest set = 4;</code>
     */
    public function setSet(&$var)
    {
        GPBUtil::checkMessage($var, \Tests\SetTest::class);
        $this->writeOneof(4, $var);
    }

    /**
     * <code>.tests.UpdateTest update = 5;</code>
     */
    public function getUpdate()
    {
        return $this->readOneof(5);
    }

    /**
     * <code>.tests.UpdateTest update = 5;</code>
     */
    public function setUpdate(&$var)
    {
        GPBUtil::checkMessage($var, \Tests\UpdateTest::class);
        $this->writeOneof(5, $var);
    }

    /**
     * <code>.tests.UpdatePathsTest update_paths = 6;</code>
     */
    public function getUpdatePaths()
    {
        return $this->readOneof(6);
    }

    /**
     * <code>.tests.UpdatePathsTest update_paths = 6;</code>
     */
    public function setUpdatePaths(&$var)
    {
        GPBUtil::checkMessage($var, \Tests\UpdatePathsTest::class);
        $this->writeOneof(6, $var);
    }

    /**
     * <code>.tests.DeleteTest delete = 7;</code>
     */
    public function getDelete()
    {
        return $this->readOneof(7);
    }

    /**
     * <code>.tests.DeleteTest delete = 7;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Tests\DeleteTest::class);
        $this->writeOneof(7, $var);
    }

    public function getTest()
    {
        return $this->whichOneof("test");
    }

}


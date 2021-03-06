<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: query.proto

namespace Vitess\Proto\Query {

  class MessageAckRequest extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Vtrpc\CallerID */
    public $effective_caller_id = null;
    
    /**  @var \Vitess\Proto\Query\VTGateCallerID */
    public $immediate_caller_id = null;
    
    /**  @var \Vitess\Proto\Query\Target */
    public $target = null;
    
    /**  @var string */
    public $name = null;
    
    /**  @var \Vitess\Proto\Query\Value[]  */
    public $ids = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'query.MessageAckRequest');

      // OPTIONAL MESSAGE effective_caller_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "effective_caller_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtrpc\CallerID';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE immediate_caller_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "immediate_caller_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\VTGateCallerID';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE target = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "target";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\Target';
      $descriptor->addField($f);

      // OPTIONAL STRING name = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE ids = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Query\Value';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <effective_caller_id> has a value
     *
     * @return boolean
     */
    public function hasEffectiveCallerId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <effective_caller_id> value
     *
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function clearEffectiveCallerId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <effective_caller_id> value
     *
     * @return \Vitess\Proto\Vtrpc\CallerID
     */
    public function getEffectiveCallerId(){
      return $this->_get(1);
    }
    
    /**
     * Set <effective_caller_id> value
     *
     * @param \Vitess\Proto\Vtrpc\CallerID $value
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function setEffectiveCallerId(\Vitess\Proto\Vtrpc\CallerID $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <immediate_caller_id> has a value
     *
     * @return boolean
     */
    public function hasImmediateCallerId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <immediate_caller_id> value
     *
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function clearImmediateCallerId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <immediate_caller_id> value
     *
     * @return \Vitess\Proto\Query\VTGateCallerID
     */
    public function getImmediateCallerId(){
      return $this->_get(2);
    }
    
    /**
     * Set <immediate_caller_id> value
     *
     * @param \Vitess\Proto\Query\VTGateCallerID $value
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function setImmediateCallerId(\Vitess\Proto\Query\VTGateCallerID $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <target> has a value
     *
     * @return boolean
     */
    public function hasTarget(){
      return $this->_has(3);
    }
    
    /**
     * Clear <target> value
     *
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function clearTarget(){
      return $this->_clear(3);
    }
    
    /**
     * Get <target> value
     *
     * @return \Vitess\Proto\Query\Target
     */
    public function getTarget(){
      return $this->_get(3);
    }
    
    /**
     * Set <target> value
     *
     * @param \Vitess\Proto\Query\Target $value
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function setTarget(\Vitess\Proto\Query\Target $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(4);
    }
    
    /**
     * Clear <name> value
     *
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function clearName(){
      return $this->_clear(4);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(4);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function setName( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <ids> has a value
     *
     * @return boolean
     */
    public function hasIds(){
      return $this->_has(5);
    }
    
    /**
     * Clear <ids> value
     *
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function clearIds(){
      return $this->_clear(5);
    }
    
    /**
     * Get <ids> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Query\Value
     */
    public function getIds($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <ids> value
     *
     * @param \Vitess\Proto\Query\Value $value
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function setIds(\Vitess\Proto\Query\Value $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <ids>
     *
     * @return \Vitess\Proto\Query\Value[]
     */
    public function getIdsList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <ids>
     *
     * @param \Vitess\Proto\Query\Value $value
     * @return \Vitess\Proto\Query\MessageAckRequest
     */
    public function addIds(\Vitess\Proto\Query\Value $value){
     return $this->_add(5, $value);
    }
  }
}


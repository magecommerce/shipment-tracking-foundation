<?php
/**
 * Slince shipment tracker library
 * @author Tao <taosikai@yeah.net>
 */
namespace Slince\ShipmentTracking\Foundation;

class Shipment implements ShipmentInterface, \JsonSerializable
{
    /**
     * @var ShipmentEvent[]
     */
    protected $events;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var string
     */
    protected $weightUnit;

    /**
     * @var string
     */
    protected $origin;

    /**
     * @var string
     */
    protected $destination;

    /**
     * @var \DateTime
     */
    protected $deliveredAt;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var boolean
     */
    protected $isDelivered;

    public function __construct(array $events = [], $isDelivered = null)
    {
        $this->events = $events;
        $this->isDelivered = $isDelivered;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return Shipment
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     * @return Shipment
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return Shipment
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     * @return Shipment
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveredAt()
    {
        return $this->deliveredAt;
    }

    /**
     * @param \DateTime $deliveredAt
     * @return Shipment
     */
    public function setDeliveredAt($deliveredAt)
    {
        $this->deliveredAt = $deliveredAt;
        return $this;
    }

    /**
     * @param ShipmentEvent[] $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @return ShipmentEvent[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Shipment
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDelivered()
    {
        return $this->isDelivered;
    }

    /**
     * @param bool $isDelivered
     * @return Shipment
     */
    public function setIsDelivered($isDelivered)
    {
        $this->isDelivered = $isDelivered;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return [
            'is_delivered' => $this->isDelivered,
            'status' => $this->status,
            'weight' => $this->weight,
            'weight_unit' => $this->weightUnit,
            'origin' => $this->origin,
            'destination' => $this->destination,
            'delivered_at' => $this->deliveredAt,
            'events' => $this->events
        ];
    }
}

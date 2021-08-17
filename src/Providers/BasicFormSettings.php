<?php
declare(strict_types=1);


namespace Tudy\HallParameters\Providers;

use stdClass;

/**
 * Basic settings of forms values
 */
class BasicFormSettings
{
    private stdClass $limitations;
    private stdClass $basicDimension;





    public function __construct()
    {
        $path                 = base_path("tudy/hall-parameters/src/config/form-settings.json");
        $json                 = json_decode(file_get_contents($path));
        $this->limitations    = $json->limitations;
        $this->basicDimension = $json->basicDimension;
    }



// ------------------- limitations ------------------------------------------

    /**
     * @return float
     */
    public function minWidth(): float
    {
        return $this->limitations->minWidth;
    }





    /**
     * @return float
     */
    public function maxWidth(): float
    {
        return $this->limitations->maxWidth;
    }





    /**
     * @return float
     */
    public function minLength(): float
    {
        return $this->limitations->minLength;
    }





    /**
     * @return float
     */
    public function maxLength(): float
    {
        return $this->limitations->maxLength;
    }





    /**
     * @return float
     */
    public function minHeight(): float
    {


        return $this->limitations->minHeight;
    }





    /**
     * @return float
     */
    public function maxHeight(): float
    {


        return $this->limitations->maxHeight;
    }





    /**
     * @return float
     */
    public function minRoofPitchGable(): float
    {
        return $this->limitations->minRoofPitchGable;
    }





    /**
     * @return float
     */
    public function maxRoofPitchGable(): float
    {
        return $this->limitations->maxRoofPitchGable;
    }


    /**
     * @return float
     */
    public function minRoofPitchFlat(): float
    {
        return $this->limitations->minRoofPitchFlat;
    }





    /**
     * @return float
     */
    public function maxRoofPitchFlat(): float
    {
        return $this->limitations->maxRoofPitchFlat;
    }





    /**
     * @return float
     */
    public function minModuleSize(): float
    {
        return $this->limitations->minModuleSize;
    }





    /**
     * @return float
     */
    public function maxModuleSize(): float
    {
        return $this->limitations->maxModuleSize;
    }





    /**
     * @return float
     */
    public function minPurlinDistanceDimension(): float
    {
        return $this->limitations->minPurlinDistanceDimension;
    }





    /**
     * @return float
     */
    public function maxPurlinDistanceDimension(): float
    {
        return $this->limitations->maxPurlinDistanceDimension;
    }





    /**
     * @return float
     */
    public function minDimensionSideRailDistance(): float
    {
        return $this->limitations->minDimensionSideRailDistance;
    }





    /**
     * @return float
     */
    public function maxDimensionSideRailDistance(): float
    {
        return $this->limitations->maxDimensionSideRailDistance;
    }



//----------------- basic dimension ------------------------------------------

    /**
     * @return float
     */
    public function roofPitchGable(): float
    {
        return $this->basicDimension->roofPitchGable;
    }


    /**
     * @return float
     */
    public function roofPitchFlat(): float
    {
        return $this->basicDimension->roofPitchFlat;
    }





    /**
     * @return float
     */
    public function moduleSize(): float
    {
        return $this->basicDimension->moduleSize;
    }





    /**
     * @return float
     */
    public function purlinDistanceDimension(): float
    {
        return $this->basicDimension->purlinDistanceDimension;
    }





    /**
     * @return float
     */
    public function dimensionSideRailDistance(): float
    {
        return $this->basicDimension->dimensionSideRailDistance;
    }


}
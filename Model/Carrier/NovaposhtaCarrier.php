<?php
declare(strict_types=1);

namespace Cl\Np\Model\Carrier;

use \Psr\Log\LoggerInterface;
use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Framework\Controller\ResultFactory;
use \Magento\Shipping\Model\Carrier\AbstractCarrier;
use \Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory;
use \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory;

class NovaposhtaCarrier extends AbstractCarrier
{
    /**
     * The carrier code
     *
     * @var string
     */
    protected $_code = 'novaposhta';

    /**
     * The result factory
     *
     * @var \Magento\Framework\Controller\ResultFactory;

     */
    protected $_rateResultFactory;

    /**
     * The method factory
     *
     * @var \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory
     */
    protected $_rateMethodFactory;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        ErrorFactory $rateErrorFactory,
        LoggerInterface $logger,
        ResultFactory $rateResultFactory,
        MethodFactory $rateMethodFactory,
        array $data

    )
    {
        $this->_rateResultFactory = $rateResultFactory;
        $this->_rateMethodFactory = $rateMethodFactory;

        parent::__construct($scopeConfig, $rateErrorFactory, $logger, $data);
    }


    public function getAllowedMethods()
    {
        
    }
}
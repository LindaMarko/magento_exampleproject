<?php

declare(strict_types=1);

namespace MageMastery\CustomPage\Controller\Custom;

use Magento\Framework\Controller\Result\Json;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Page extends Action
{
    public function execute()
    {
        /** @var Json $jsonResult */
        $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $jsonResult->setData([
            'message' => 'My Custom Page'
        ]);
        return $jsonResult;
    }
}
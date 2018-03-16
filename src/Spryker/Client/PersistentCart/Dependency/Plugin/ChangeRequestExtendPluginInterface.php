<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\PersistentCart\Dependency\Plugin;

use Generated\Shared\Transfer\PersistentCartChangeTransfer;

interface ChangeRequestExtendPluginInterface
{
    /**
     * Specification:
     * - Plugin executed to extend add to cart requests.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\PersistentCartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\PersistentCartChangeTransfer
     */
    public function extend(PersistentCartChangeTransfer $cartChangeTransfer): PersistentCartChangeTransfer;
}

<?php
  declare(strict_types=1);

	namespace Redsys\Merchant;

	use ReflectionClass;

	class MerchantEnvironment {
		public const LIVE = 'live';
		public const TEST = 'test';
		public const INTEGRATION = 'integration';
		public const REST_LIVE = 'restLive';
		public const REST_TEST = 'restTest';
		public const REST_INTEGRATION = 'restIntegration';
		public const START_REST_LIVE = 'startRequestRestLive';
		public const START_REST_TEST = 'startRequestRestTest';
		public const START_REST_INTEGRATION = 'startRequestRestIntegration';
		public const MANAGE_REQUEST_REST_LIVE = 'manageRequestRestLive';
		public const MANAGE_REQUEST_REST_TEST = 'manageRequestRestTest';
		public const MANAGE_REQUEST_REST_INTEGRATION = 'manageRequestRestIntegration';

		public static function isValid (string $value) : bool {
			return in_array($value, (new ReflectionClass(self::class))->getConstants());
		}
	}

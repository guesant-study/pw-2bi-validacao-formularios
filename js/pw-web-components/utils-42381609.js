const getPwConfigBaseUrl = (el) => {
  const closestConfig = el.closest('[data-pw-config-base-url]');
  if (closestConfig) {
    const configValue = closestConfig.dataset.pwConfigBaseUrl;
    if (typeof configValue === 'string') {
      return configValue;
    }
  }
  return './';
};

export { getPwConfigBaseUrl as g };

//# sourceMappingURL=utils-42381609.js.map
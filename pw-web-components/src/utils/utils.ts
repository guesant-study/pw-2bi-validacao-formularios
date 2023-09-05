export const getPwConfigBaseUrl = (el: HTMLElement) => {
  const closestConfig: HTMLElement | null = el.closest('[data-pw-config-base-url]');

  if (closestConfig) {
    const configValue = closestConfig.dataset.pwConfigBaseUrl;

    if (typeof configValue === 'string') {
      return configValue;
    }
  }

  return './';
};

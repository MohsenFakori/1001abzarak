import { expect, test } from '@playwright/test';

test('health endpoint responds successfully', async ({ request }) => {
    const response = await request.get('/up');
    expect(response.status()).toBe(200);
});

test('deployment landing page is available in Persian and RTL', async ({ page }) => {
    await page.goto('/');
    await expect(page.locator('html')).toHaveAttribute('lang', 'fa');
    await expect(page.locator('html')).toHaveAttribute('dir', 'rtl');
    await expect(page).toHaveTitle('هزار ابزارک');
});

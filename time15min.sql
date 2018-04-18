# https://www.sitepoint.com/community/t/how-select-on-interval-of-15min-for-drawing-charts-with-adding-empty-records/9876
# https://www.sitepoint.com/community/t/how-do-i-return-a-group-count-for-every-15-minutes-of-the-hour-on-my-table/4647
SELECT name, date,
  FROM_UNIXTIME(FLOOR(UNIX_TIMESTAMP(`date`)/900)*900) AS timeslice
FROM cryptocurrencies GROUP BY timeslice
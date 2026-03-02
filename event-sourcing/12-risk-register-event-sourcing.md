# 12 - Risk Register (Event Sourcing)

| Risk ID | Risk | Probability | Impact | Response | Owner | Trigger |
|---|---|---|---|---|---|---|
| R-ES-01 | Event schema breaking change | Medium | High | Schema governance + compatibility test | Architect | Consumer errors > threshold |
| R-ES-02 | Projection lag tăng cao | Medium | Medium | Scale consumer + backpressure tuning | Platform | Lag > SLO |
| R-ES-03 | Data replay mất nhiều thời gian | High | Medium | Snapshot + partition strategy | Tech Lead | Rebuild > window |

## Risk review cadence
- Weekly technical risk review.
- Monthly steering committee review.


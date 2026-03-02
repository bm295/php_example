# 11 - Test Strategy cho Event Sourcing

## Test layers
- Unit tests cho aggregate invariants
- Integration tests cho command-handler/event-store
- Contract tests cho event schema
- End-to-end tests cho projection correctness

## Replay tests
- Full replay scenario:
- Partial replay scenario:
- Performance threshold:

## Failure scenarios
- Duplicate event
- Out-of-order event
- Poison message

